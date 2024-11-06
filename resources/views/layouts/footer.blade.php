<footer class="bg-light py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>{{ config('app.name', 'Laravel') }}</h5>
                <p class="text-white">
                    A portfolio and project management system built with Laravel.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                    @auth
                        <li><a href="{{ route('admin.projects.index') }}" class="text-decoration-none">Projects</a></li>
                    @endauth
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope me-2"></i> info@example.com</li>
                    <li><i class="fas fa-phone me-2"></i> +1 234 567 890</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
