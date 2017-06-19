<div class="product-fullinfo__item">
    <div class="product-fullinfo__header">
        <div class="product-fullinfo__title">Отзывы покупателей</div>
    </div>
    <div class="product-fullinfo__inner" data-comments="">
        <div class="comments" data-comments="">

            <!-- List of user comments -->
            <div class="comments__list">
                <div class="comments__post" data-comments-post="168">
                    <div class="comments__post-header">
                        <div class="comments__post-author">Pavlo</div>
                        <time class="comments__post-date" datetime="2016-09-06T10:11">06
                            Сентября 2016 10:11
                        </time>
                        <div class="comments__post-rate">
                            <div class="star-rating">
                                <i class="star-rating__star star-rating__star--active"
                                   title="5 из 5 звезд">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__star"></use>
                                    </svg>
                                </i>
                                <i class="star-rating__star star-rating__star--active"
                                   title="5 из 5 звезд">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__star"></use>
                                    </svg>
                                </i>
                                <i class="star-rating__star star-rating__star--active"
                                   title="5 из 5 звезд">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__star"></use>
                                    </svg>
                                </i>
                                <i class="star-rating__star star-rating__star--active"
                                   title="5 из 5 звезд">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__star"></use>
                                    </svg>
                                </i>
                                <i class="star-rating__star star-rating__star--active"
                                   title="5 из 5 звезд">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__star"></use>
                                    </svg>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="comments__post-text">Хороший відгук</div>
                    <div class="comments__post-footer">
                        <div class="comments__post-vote">
                            <a class="comments__post-vote-item"
                               href="http://unishopvertical.imagecmsdemo.net/comments/setyes/168"
                               title="Нравится"
                               data-comments-vote-url="http://unishopvertical.imagecmsdemo.net/comments/commentsapi/setyes"
                               rel="nofollow">
                                <i class="comments__post-vote-ico">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__like"></use>
                                    </svg>
                                </i>
                                <span class="comments__post-vote-count"
                                      data-comments-vote-value="">4</span>
                            </a>
                            <a class="comments__post-vote-item"
                               href="http://unishopvertical.imagecmsdemo.net/comments/setno/168"
                               title="Не нравится"
                               data-comments-vote-url="http://unishopvertical.imagecmsdemo.net/comments/commentsapi/setno"
                               rel="nofollow">
                                <i class="comments__post-vote-ico comments__post-vote-ico--dislike">
                                    <svg class="svg-icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#svg-icon__like"></use>
                                    </svg>
                                </i>
                                <span class="comments__post-vote-count"
                                      data-comments-vote-value="">1</span>
                            </a>
                        </div>
                        <div class="comments__post-reply">
                            <button class="comments__post-reply-link"
                                    data-comments-reply-link="">Ответить
                            </button>
                        </div>
                    </div>
                    <div class="comments__post-reply-form hidden"
                         data-comments-form-wrapper=""></div>
                    <!-- Parent comments (reply to comments) list -->
                </div>
            </div>

            <!-- Message if user must to sign in to leave a comment -->
            <!-- Main comment form  -->
            <div id="comments-anchor"></div>
            <div class="comments__form">
                <div class="comments__form-header">Написать отзыв</div>
                <div class="comments__form-body">
                    <!-- Checking error in main comment, not in answer form -->

                    <form class="form"
                          action="http://unishopvertical.imagecmsdemo.net/comments/addPost#comments-anchor"
                          method="post" data-comments-form="main"
                          data-comments-form-url="http://unishopvertical.imagecmsdemo.net/comments/commentsapi/newPost"
                          data-comments-form-list-url="http://unishopvertical.imagecmsdemo.net/comments/commentsapi/renderPosts">

                        <!-- Messages BEGIN -->
                        <div class="form__messages hidden" data-comments-error-frame="">
                            <div class="message message--error">
                                <div class="message__list" data-comments-error-list="">
                                </div>
                            </div>
                        </div>

                        <div class="form__messages hidden" data-comments-success="">
                            <p class="message message--success">
                                Ваш комментарий был успешно опубликован </p>
                        </div>
                        <!-- END Messages -->

                        <!-- Name field input BEGIN -->

                        <div class="form__field form__field--hor">
                            <div class="form__label">
                                Имя <i class="form__require-mark"></i></div>
                            <div class="form__inner">
                                <input class="form-control" type="text" name="comment_author"
                                       value="" required="">
                            </div>
                        </div>    <!-- END Name field input -->


                        <!-- Email field input BEGIN -->

                        <div class="form__field form__field--hor">
                            <div class="form__label">
                                E-mail <i class="form__require-mark"></i></div>
                            <div class="form__inner">
                                <input class="form-control" type="email" name="comment_email"
                                       value="" required="">
                            </div>
                        </div>    <!-- END Name field input -->


                        <!-- Review field textarea BEGIN -->

                        <div class="form__field form__field--hor">
                            <div class="form__label">
                                Отзыв <i class="form__require-mark"></i></div>
                            <div class="form__inner">
                                                        <textarea class="form-control" name="comment_text" rows="5"
                                                                  required=""></textarea>
                            </div>
                        </div>  <!-- END Review field textarea -->


                        <!-- Rating field BEGIN -->
                        <div class="form__field form__field--hor form__field--static"
                             data-comments-form-rating="">
                            <div class="form__label">Рейтинг</div>
                            <div class="form__inner">

                                <div class="star-voting">
                                    <div class="star-voting__wrap">
                                        <input class="star-voting__input" id="star-voting-5"
                                               type="radio" name="ratec" value="5">
                                        <label class="star-voting__ico" for="star-voting-5"
                                               title="5 из 5 звезд">
                                            <svg class="svg-icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#svg-icon__star"></use>
                                            </svg>
                                        </label>
                                        <input class="star-voting__input" id="star-voting-4"
                                               type="radio" name="ratec" value="4">
                                        <label class="star-voting__ico" for="star-voting-4"
                                               title="4 из 5 звезд">
                                            <svg class="svg-icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#svg-icon__star"></use>
                                            </svg>
                                        </label>
                                        <input class="star-voting__input" id="star-voting-3"
                                               type="radio" name="ratec" value="3">
                                        <label class="star-voting__ico" for="star-voting-3"
                                               title="3 из 5 звезд">
                                            <svg class="svg-icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#svg-icon__star"></use>
                                            </svg>
                                        </label>
                                        <input class="star-voting__input" id="star-voting-2"
                                               type="radio" name="ratec" value="2">
                                        <label class="star-voting__ico" for="star-voting-2"
                                               title="2 из 5 звезд">
                                            <svg class="svg-icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#svg-icon__star"></use>
                                            </svg>
                                        </label>
                                        <input class="star-voting__input" id="star-voting-1"
                                               type="radio" name="ratec" value="1">
                                        <label class="star-voting__ico" for="star-voting-1"
                                               title="1 из 5 звезд">
                                            <svg class="svg-icon">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#svg-icon__star"></use>
                                            </svg>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END Rating field -->


                        <!-- Captcha field BEGIN -->
                        <!-- END Captcha field -->

                        <!-- Submit button BEGIN -->
                        <div class="form__field form__field--hor">
                            <div class="form__label"></div>
                            <div class="form__inner">
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>
                        </div>
                        <!-- END Submit button -->

                        <input type="hidden" name="action" value="newPost">
                        <input type="hidden" name="comment_parent" value="0"
                               data-comments-parent="">
                        <input type="hidden" value="ef6330c8ca9513f9aa2a61069ed1c772"
                               name="cms_token"></form>
                    <div class="hidden" data-reply-form="">
                        <!-- Checking error in main comment, not in answer form -->

                        <form class="form"
                              action="http://unishopvertical.imagecmsdemo.net/comments/addPost#comments-anchor"
                              method="post" data-comments-form="reply"
                              data-comments-form-url="http://unishopvertical.imagecmsdemo.net/comments/commentsapi/newPost"
                              data-comments-form-list-url="http://unishopvertical.imagecmsdemo.net/comments/commentsapi/renderPosts">

                            <!-- Messages BEGIN -->
                            <div class="form__messages hidden" data-comments-error-frame="">
                                <div class="message message--error">
                                    <div class="message__list" data-comments-error-list="">
                                    </div>
                                </div>
                            </div>

                            <div class="form__messages hidden" data-comments-success="">
                                <p class="message message--success">
                                    Ваш комментарий был успешно опубликован </p>
                            </div>
                            <!-- END Messages -->

                            <div class="form__row">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- Name field input BEGIN -->

                                        <div class="form__field ">
                                            <div class="form__inner">
                                                <input class="form-control" type="text"
                                                       name="comment_author" value=""
                                                       placeholder="Имя" required="">
                                            </div>
                                        </div>                    <!-- END Name field input -->
                                    </div>
                                    <div class="col-sm-6 col--spacer-xs">
                                        <!-- Email field input BEGIN -->

                                        <div class="form__field ">
                                            <div class="form__inner">
                                                <input class="form-control" type="email"
                                                       name="comment_email" value=""
                                                       placeholder="E-mail" required="">
                                            </div>
                                        </div>            <!-- END Name field input -->
                                    </div>
                                </div>
                            </div>

                            <!-- Review field textarea BEGIN -->

                            <div class="form__field ">
                                <div class="form__inner">
                                                            <textarea class="form-control" name="comment_text" rows="5"
                                                                      placeholder="Отзыв" required=""></textarea>
                                </div>
                            </div>    <!-- END Review field textarea -->

                            <!-- Captcha field BEGIN -->
                            <!-- END Captcha field -->

                            <!-- Submit button BEGIN -->
                            <div class="form__field">
                                <div class="form__inner">
                                    <button type="submit" class="btn btn-default">Отправить
                                    </button>
                                </div>
                            </div>
                            <!-- END Submit button -->

                            <input type="hidden" name="action" value="newPost">
                            <input type="hidden" name="comment_parent" value="0"
                                   data-comments-parent="">
                            <input type="hidden" value="ef6330c8ca9513f9aa2a61069ed1c772"
                                   name="cms_token">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>