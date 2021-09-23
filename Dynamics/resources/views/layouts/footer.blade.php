<footer>
    <section class="footer-area footer-dark">
<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="{{ URL::asset('images/base-logo.png') }}" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/?=@bifmtec"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/bifm-technologies-486b1b212"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->

                    <div class="copyright text-center mt-35">
                        @guest
                            <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('BIFM+') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('.') }}</a>
                            @endif
                        @else
                            <span>{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                            class="no-underline hover:underline"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                            <a class="btn btn-outline-primary btn-sm" href="/Dashboard">{{ __('Dashboard') }}</a>
                        @endguest
                        <p class="text">Bifm-Tech copyright 2021</a> </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
</div> <!-- container -->
</section>
</footer>
