<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\KnowledgeBase;


class OpenRouterService
{
//    public static function getChatResponse($userMessage, $chatHistory): string
//    {
//
//        $model = 'tngtech/deepseek-r1t2-chimera:free';
//        $apiKey = config('services.openrouter.key');
//        $baseUrl = config('services.openrouter.base_url');
//
//        $response = Http::withHeaders([
//            'Authorization' => 'Bearer ' . $apiKey,
//            'HTTP-Referer' => config('app.url'),
//            'X-Title' => config('app.name'),
//        ])->post("{$baseUrl}/chat/completions", [
//                    'model' => $model,
//                    'messages' => [['role' => 'user', 'content' => $userMessage],],
//                ]);
//
//        if ($response->successful()) {
//            return $response->json('choices.0.message.content');
//        }
//
//        Log::error("OpenRouter API Error: " . $response->status(), ['body' => $response->body()]);
//        return null;
//    }

    public static function getChatResponse(string $input, array $historyJson): string
    {
        $model = 'nvidia/nemotron-nano-9b-v2:free';
        $apiKey = config('services.openrouter.key');
        $baseUrl = config('services.openrouter.base_url');
        // 1. Retrieve Relevant Knowledge
        // Simple keyword search in MySQL (searches for matching words)

        $inputArray = explode(" ", $input);

        $relevantInfo = [];

        $wordy = "";

        foreach ($inputArray as $word) {

            $result = KnowledgeBase::where('kb_keyword', 'LIKE', '%' . $word . '%')
                ->orWhere('kb_content', 'LIKE', "%{$word}%")
                ->limit(3)
                ->get()
                ->pluck('kb_content')
                ->implode("\n\n");

            if ($result) {

                array_push($relevantInfo, ". ");

                $wordy = $relevantInfo;

            }
        }

        $relevantInfoString = implode(' ', $relevantInfo) ?? "There is no context available, direct user to customer support https://cs2team20.cs2410-web01pvm.aston.ac.uk/contact";
        // 2. Build the System Prompt (The Rules)
        $systemPrompt = '
### SYSTEM INSTRUCTIONS
You are a customer support agent for "Naturale". You must answer the users question adhering strictly to the following rules:

RULE 1 (REFUND OVERRIDE): 
If the user mentions "refund", "discount", or "money back", ignore all other context and output EXACTLY and ONLY this sentence: "Please email NaturaleHelpDesk@gmail.com for assistance with this."

RULE 2 (SOURCE OF TRUTH):
Answer using ONLY the text provided in the "CONTEXT" block below. If the answer is not explicitly written in the context, output "I do not know." Do not make up information.

RULE 3 (LINKS):
- You may only use URLs that appear verbatim in the context.
- Format links using HTML: <a href="URL">Topic</a>
- If a topic is in the context but has no URL, mention it as text only.

RULE 4 (FORMATTING):
- Output plain text only. 
- NO Markdown (no bold, no italics, no bullet points).
- NO internal thoughts or <think> tags.
- Return ONLY the final response string.

### CONTEXT
{$relevantInfoString}
';

        // 3. Format History for the API
        // Transform your $message structure into OpenAI format
        $messages = [];
        $messages[] = ['role' => 'user', 'content' => $systemPrompt];

        foreach ($historyJson as $msg) {
            // Map your 'sender' to 'user' or 'assistant'
            $role = ($msg['sender'] === 'user' || $msg['sender'] === 'customer') ? 'user' : 'assistant';
            $messages[] = [
                'role' => $role, 
                'content' => $msg['text']
            ];
        }

        // Add the current new input
        $messages[] = ['role' => 'system', 'content' => $input];

        // 4. Call the API
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'HTTP-Referer' => config('app.url'), // Required by OpenRouter for free tier
                'X-Title'      => config('app.name'), // Required by OpenRouter for free tier
                'Content-Type' => 'application/json',
            ])->post("{$baseUrl}/chat/completions", [
                'model' => $model,
                'messages' => $messages,
                'temperature' => 0.7, // Balance between creativity and strictness
            ]);

            if ($response->failed()) {
                // Log error for debugging
                \Log::error('Support Bot Error: ' . $response->body());

                if (str_contains($response->body(), "rate-limited")) {

                    //return $relevantInfo;

                    return 'AI agent is currently unavailable. Please contact support <a href="/contact">here</a>.';
                
                } else {

                    //return $response->body();

                    return 'I am having trouble connecting right now. Please contact support <a href="/contact">here</a>.';


                }
                //return $response->body();
            }

            return $response->json('choices.0.message.content') ?? "I couldn't generate a response.";

        } catch (\Exception $e) {
            \Log::error($e);
            return "An internal error occurred.";
        }
    }
}
