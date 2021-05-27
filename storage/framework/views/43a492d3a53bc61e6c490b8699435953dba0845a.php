<?php $__env->startSection('content'); ?>

    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script>
        let content = "";
        $( document ).ready(function() {
            $.get("/public/api/posts", { token: '03AGdBq26hsFZoSuAT2Cigek4ARGr69N5dwaIA8mdJD2nz-GQ-f9juGOmUc_OjkxakPWGKc9nF-ieV8LIVjKknnBZigMLn9S1RuTCHhKFSx-VKmImgDN_ZNvvDuI0RH7hkQYQqaBOrt78C9vW4g75M0EUaBan1M_Lfsz2ueNj4s6x9jIcccaVE8S0CaWUq1a85xcsRnezB2YWv213CU6zD4VDfoBrM2jKF5mqeVu13zEW92zVnAY1o5V11c8ty-9JGDrx9XhKurZ-RpZycuhEiUY7J-7ykcifCpDC_DFSsSYJp5Ycha3wr72un1j14LNXCEIYO06lyEE6_5kiHEgQKz4RBNtPWL-3Hthyf5RC-ZXZy0Aohxa_in-t0rerG9EDYBXs7DQh5NzRt0MPZDSzLi_Bvh-dhFXKj5z0_Bek22TtnC7x29Q2PfI77wwyHbIiv86ap9zVaFFcuAffpGX7II2qVDmrLg1nHdA'}, function(data){
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
            // grecaptcha.ready(function() {
            //     grecaptcha.execute('6LfaC8YaAAAAAIVEx3fYa4idzNQcV4embFU5rMTi', {action: 'submit'}).then(function(token) {
            //         $.get("/public/api/posts", { token: token}, function(data){
            //             for (const post of data.data){
            //                 content += `
            //             <div class="panel panel-default">
            //                 <div class="panel-heading">
            //                     ${post.title.substring(0, 800)}
            //                 </div>
            //
            //                 <div class="panel-body">
            //                     <p>${post.body}</p>
            //                     <p>
            //                         <span class="btn btn-sm btn-success">Рецепты</span>
            //                         <a href="posts/${post.id}" class="btn btn-sm btn-primary">See more</a>
            //                     </p>
            //                 </div>
            //             </div>`;
            //             }
            //             $(".posts").html(content);
            //         });
            //     });
            // });
        });
    </script>
    <div class="container">
        <?php echo $__env->make('frontend._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-md-12 posts">
            </div>
        </dev>
    </dev>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dylan-tracy/Desktop/websites/txt-utility/public/resources/views/frontend/index.blade.php ENDPATH**/ ?>