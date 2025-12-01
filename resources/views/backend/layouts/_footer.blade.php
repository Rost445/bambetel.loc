<footer class="footer text-center">
    &copy; {{ now()->setTimezone('Europe/Kyiv')->format('Y H:i') }}
    <strong><span>{{ env('APP_NAME') }}</span>.</strong> Усі права захищені.
</footer>
