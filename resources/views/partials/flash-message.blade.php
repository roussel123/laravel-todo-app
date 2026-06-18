@if (session('success'))
    <div id="success-message">
        {{ session('success') }}
    </div>
        <script>
            setTimeout(() => {
                document
                .getElementById('success-message')
                ?.remove();
            }, 3000);
        </script>
@endif