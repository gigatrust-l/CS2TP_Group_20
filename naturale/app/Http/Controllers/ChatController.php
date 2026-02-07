<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{

    private $useAI = false;

    private $rules = [
        'about naturale' => 'Naturale is the premier destination for ecofriendly, natural, and organic haircare products. To see more about us, view our about us page <a href="/about">here.</a> ',
        'product recommendations' => 'You can view information about our ingredients <a href="/ingredients">here.</a>',
        'customer support' => 'You can reach out to support <a href="/contact">here</a> or send an email to <a href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@gmail.com.</a>',
        'order information' => 'You can view your orders <a href="/orders">here</a> if you were logged in.',
        'return' => 'You can reach out to support <a href="/contact">here</a> or send an email to <a href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@gmail.com.</a>',
    ];

    public function index() {
        return view('chatbot_test');
    }

    public function startChat() {
        Session::forget('chat_history');

        if ($this->useAI) {
            $welcomeMsg = "Welcome to Naturale Support! How may I help you today?";

            $this->addToHistory('bot', $welcomeMsg, false);


        } else {
            $welcomeMsg = "Welcome to Naturale Support! Type or click an option below to get more information.";

            $this->addToHistory('bot', $welcomeMsg, false);

            //$this->helpOptions();
            $this->addToHistory('bot', "About Naturale", true);

            $this->addToHistory('bot', "Product Recommendations", true);

            $this->addToHistory('bot', "Order information", true);

            $this->addToHistory('bot', "Customer Support", true);


        }

        return response()->json(['status' => 'started', 'history' => Session::get('chat_history')]);
    }

    public function endChat() {
        Session::forget('chat_history');

        return response()->json(['status' => 'ended']);
    }

    private function addToHistory($sender, $text, $isButton) {
        $message = ['sender' => $sender, 'text' => $text, 'time' => now()->format('H:i'), 'isButton' => $isButton];

        Session::push('chat_history', $message);

    }

    public function helpOptions() {
        $this->addToHistory('bot', "About Naturale", true);

        $this->addToHistory('bot', "Product Recommendations", true);

        $this->addToHistory('bot', "Order information", true);

        $this->addToHistory('bot', "Customer Support", true);

        return array("About Naturale","Product Recommendations","Order information","Customer Support");

    }

    public function sendMessage(Request $request) {
        $message = strtolower(trim($request->input('message')));

        $this->addToHistory('user', $request->input('message'), false);

        $response = null;

        $help = false;

        if ($this->useAI) {
            $response = '';

            $response = $this->getAiResponse($message);

            $this->addToHistory('bot', $response, false);

        } else if ($message === "help") {
            $response = [];

            array_push($response, "Select from the options below:");

            $this->addToHistory('bot', "Select from the options below:", false);

            $response = array_merge($response, $this->helpOptions());

            $help = true;

        } else if ($message === "order information") {
            $response = [];

            array_push($response, $this->rules[$message], "If not, " . $this->rules["customer support"]);

            $this->addToHistory('bot', $this->rules[$message], false);

            $this->addToHistory('bot', "If not, " . $this->rules["customer support"], false);

        } else {
            $response = '';

            $response = $this->rules[$message] ?? "I didn't understand that. Type 'help' to see options.";

            $this->addToHistory('bot', $response, false);

        }

        return response()->json([
            'response' => $response,
            'history' => Session::get('chat_history', []),
            'help' => $help
        ]);
    }

    // potential ai integration
    private function getAiResponse($input) {
        return "ai saw " . $input;
    }

}