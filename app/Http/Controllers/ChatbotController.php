<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function saveChoices(Request $request)
    {
        $data = $request->all();
        // Aqui você pode salvar as escolhas e os dados do formulário no banco de dados ou processá-los conforme necessário

        return response()->json(['message' => 'Choices saved successfully']);
    }
}
