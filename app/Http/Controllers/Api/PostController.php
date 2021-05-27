<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->token){
            return response("Не решена капча");
        }

        $client = new Client([
            'base_uri' => 'https://google.com/recaptcha/api/',
            'timeout' => 2.0
        ]);

        $response = $client->request('POST', 'siteverify', [
            'query' => [
                'secret' => '6LfaC8YaAAAAALhyDMibuPhsicD_0UDe4gb4yUhv',
                'response' => $request->token]]);
        $response = json_decode($response);

        if ($response->success){
            $posts = Post::all();

            return PostResource::collection($posts);
        }
        return response('Капча решена неверно');
    }

    public function show(Post $post)
    {
        Cache::put($post->etag, $post->id);

        $post = $post->load(['category', 'comments.user', 'tags', 'user']);

        return new PostResource($post);
    }
}
