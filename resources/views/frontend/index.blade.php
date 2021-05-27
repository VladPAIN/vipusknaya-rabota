@extends('layouts.app')

@section('content')
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script>
        let content = "";
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfaC8YaAAAAAIVEx3fYa4idzNQcV4embFU5rMTi', {action: 'submit'}).then(function(token) {
                $.get("/public/api/posts", { token: token}, function(data){
                    for (const post of data.data){
                        content += `
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ${post.title.substring(0, 800)}
                        </div>

                        <div class="panel-body">
                            <p>${post.body}</p>
                            <p>
                                <span class="btn btn-sm btn-success">Рецепты</span>
                                <a href="posts/${post.id}" class="btn btn-sm btn-primary">See more</a>
                            </p>
                        </div>
                    </div>`;
                    }
                    $(".posts").html(content);
                });
            });
        });
        });
    </script>
    <div class="container">
        @include('frontend._search')
        <div class="row">
            <div class="col-md-12 posts">
            </div>
        </dev>
    </dev>
@endsection
