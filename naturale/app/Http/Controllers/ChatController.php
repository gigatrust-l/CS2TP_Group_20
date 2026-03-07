<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\OpenRouterService;
use App\Services\DeepSeekService;

class ChatController extends Controller
{

    private $useAI = true;

    private $rules = [
        'about naturale' => 'Naturale is the premier destination for ecofriendly, natural, and organic haircare products. To see more about us, view our about us page <a href="/about">here.</a> ',
        'product recommendations' => 'You can view information about our ingredients <a href="/ingredients">here.</a>',
        'customer support' => 'You can reach out to support <a href="/contact">here</a> or send an email to <a href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@gmail.com.</a>',
        'order information' => 'You can view your orders <a href="/orders">here</a> if you were logged in.',
        'return' => 'You can reach out to support <a href="/contact">here</a> or send an email to <a href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@gmail.com.</a>',
    ];

    public function index()
    {
        return view('chatbot_test');
    }

    public function startChat()
    {

        if (!(Session()->exists('chat_started'))) {
            Session::forget('chat_history');

            if ($this->useAI) {
                $welcomeMsg = "Welcome to Naturale Support! How may I help you today?";

                $this->addToHistory('assistant', $welcomeMsg, false);


            } else {
                $welcomeMsg = "Welcome to Naturale Support! Type or click an option below to get more information.";

                $this->addToHistory('assistant', $welcomeMsg, false);

                $this->helpOptions();


            }

            Session::push('chat_started', 'true');

        }

        return response()->json(['status' => 'started', 'history' => Session::get('chat_history')]);
    }

    public function endChat()
    {
        Session::forget('chat_history');

        Session::forget('chat_started');

        return response()->json(['status' => 'ended']);
    }

    private function addToHistory($sender, $text, $isButton)
    {
        $message = ['sender' => $sender, 'text' => $text, 'time' => now()->format('H:i'), 'isButton' => $isButton];

        Session::push('chat_history', $message);

    }

    public function helpOptions()
    {
        $this->addToHistory('assistant', "About Naturale", true);

        $this->addToHistory('assistant', "Product Recommendations", true);

        $this->addToHistory('assistant', "Order information", true);

        $this->addToHistory('assistant', "Customer Support", true);

        return array("About Naturale", "Product Recommendations", "Order information", "Customer Support");

    }

    public function chatStatus()
    {
        $started = Session()->exists('chat_started');

        return response()->json(['started' => $started, 'history' => Session::get('chat_history')]);

    }

    public function sendMessage(Request $request)
    {

        if (auth()->check() && auth()->id() === 1 && true) {

            $this->useAI = true;

        }

        $message = strtolower(trim($request->input('message')));

        $this->addToHistory('user', $request->input('message'), false);

        $response = null;

        if ($this->useAI) {
            $response = '';

            $response = $this->getAiResponse($message, $request->input('pid'));

            $this->addToHistory('assistant', $response, false);

        } else if ($message === "help") {
            $response = [];

            array_push($response, "Select from the options below:");

            $this->addToHistory('assistant', "Select from the options below:", false);

            $response = array_merge($response, $this->helpOptions());

        } else if ($message === "order information") {
            $response = [];

            array_push($response, $this->rules[$message], "If not, " . $this->rules["customer support"]);

            $this->addToHistory('assistant', $this->rules[$message], false);

            $this->addToHistory('assistant', "If not, " . $this->rules["customer support"], false);

        } else {
            $response = '';

            $response = $this->rules[$message] ?? "I didn't understand that. Type 'help' to see options.";

            $this->addToHistory('assistant', $response, false);

        }

        return response()->json([
            'response' => $response,
            'history' => Session::get('chat_history', [])
        ]);
    }

    private function getAiResponse($input, $pid)
    {
        return DeepSeekService::getChatResponse($input, Session::get('chat_history', []), 1);
    }

}