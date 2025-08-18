<x-front-layout title="{{ $article->title }}">
    {{-- <section class="main-content-head">
        <div class="post-thumbnils">
            <img src="{{ $article->image }}" alt="{{ $article->title }}">
        </div>
        <div class="meta-information">
            <h2 class="post-title">{{ $article->title }}</h2>
        </div>
        <div class="detail-inner">
            {!! $article->content !!}
        </div>
    </section> --}}
    <!-- Start Blog Singel Area -->
    <section class="section blog-single">
        <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>{{ $article->title }}</h2>
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="single-inner">
                            <div class="post-details">
                                <div class="main-content-head">
                                    <div class="post-thumbnils">
                                        <img src="{{ asset('storage/' . $article->image) }}"
                                            alt="{{ $article->title }}" />
                                    </div>
                                    <div class="meta-information">
                                        <!-- End Meta Info -->
                                        <ul class="meta-info">
                                            <li>
                                                <a href="javascript:void(0)"> <i class="lni lni-user"></i> Roel
                                                    Aufderhar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 10 Feb
                                                    2023
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="lni lni-tag"></i> Marketing</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)"><i class="lni lni-timer"></i> 5 min
                                                    read</a>
                                            </li>
                                        </ul>
                                        <!-- End Meta Info -->
                                    </div>
                                    <div class="detail-inner">
                                        <h2 class="post-title">
                                            <a>{{ $article->title }}</a>
                                        </h2>
                                        <p>{!! $article->content !!}.</p>
                                        <!-- post image -->
                                        <ul class="list">
                                            <li><i class="lni lni-checkmark-circle"></i> For those of you who are
                                                serious
                                                about having
                                                more.</li>
                                            <li><i class="lni lni-checkmark-circle"></i> There are a million
                                                distractions in
                                                every
                                                facet of our lives.</li>
                                            <li><i class="lni lni-checkmark-circle"></i> The sad thing is the majority
                                                of
                                                people have
                                                no clue about what they truly want.</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                            aute
                                            irure
                                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                                        </p>
                                        <!-- post quote -->
                                        <blockquote>
                                            <div class="icon">
                                                <i class="lni lni-quotation"></i>
                                            </div>
                                            <h4>"Don't demand that things happen as you wish, but wish that they happen
                                                as
                                                they
                                                do
                                                happen, and you will go on well."</h4>
                                            <span>- Epictetus, The Enchiridion</span>
                                        </blockquote>
                                        {{-- <h3>Setting the mood with incense</h3>
                                    <p>Remove aversion, then, from all things that are not in our control, and transfer
                                        it
                                        to
                                        things contrary to the nature of what is in our control. But, for the present,
                                        totally
                                        suppress desire: for, if you desire any of the things which are not in your own
                                        control,
                                        you must necessarily be disappointed; and of those which are, and which it would
                                        be
                                        laudable to desire, nothing is yet in your possession. Use only the appropriate
                                        actions
                                        of pursuit and avoidance; and even these lightly, and with gentleness and
                                        reservation.
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure
                                        dolor in reprehenderit. </p> --}}
                                        <div class="post-bottom-area">
                                            <!-- Start Post Tag -->
                                            <div class="post-tag">
                                                {{-- <ul>
                                                <li><a href="javascript:void(0)">#electronics,</a></li>
                                                <li><a href="javascript:void(0)">#gadgets</a></li>
                                            </ul> --}}
                                            </div>
                                            <!-- End Post Tag -->
                                            <!-- Post Social Share -->
                                            <div class="post-social-media">
                                                <h5 class="share-title"></h5>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="lni lni-envelope"></i>
                                                            <span>Email</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="lni lni-facebook-filled"></i>
                                                            <span>facebook</span>
                                                        </a>
                                                    </li>
                                                    {{-- <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="lni lni-twitter-original"></i>
                                                        <span>twitter</span>
                                                    </a>
                                                </li> --}}
                                                    {{-- <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="lni lni-google"></i>
                                                        <span>google+</span>
                                                    </a>
                                                </li> --}}
                                                    {{-- <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="lni lni-linkedin-original"></i>
                                                        <span>linkedin</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="lni lni-pinterest"></i>
                                                        <span>pinterest</span>
                                                    </a>
                                                </li> --}}
                                                </ul>
                                            </div>
                                            <!-- Post Social Share -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Blog Singel Area -->
</x-front-layout>
