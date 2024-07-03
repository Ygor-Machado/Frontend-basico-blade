<span>{{ $user['name'] }}</span>

@pushonce('script')
    <script>
        console.log("Ola mundo familiar!");
    </script>
@endpushonce
