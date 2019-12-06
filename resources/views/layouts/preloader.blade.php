<style>
#page-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    background: #FFF none repeat scroll 0% 0%;
    z-index: 99999;
    }
</style>
{{-- <div class="spinner-grow" style="width: 3rem; height: 3rem;" id="page-loader" role="status">
        <span class="sr-only">Loading...</span>
    </div> --}}

    <script>
        $(window).load(function(){
            $('#page-loader').fadeOut();
        });
    </script>