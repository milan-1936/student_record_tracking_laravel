@if(Session::has('message'))
    <div class="fixed bottom-5 right-5 bg-blue-900 p-8 text-white" id="message">

        <p>{{session('message')}}</p>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('message').style.display = 'none';
        }, 2000);
    </script>
@endif
