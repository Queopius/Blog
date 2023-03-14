{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/js/fontawesome.min.js" integrity="sha512-bz1boXQShq1yhynCBoKGrOTa7Co1u0v96gBHpfK+77D1jJegjuDK3ugQ2/9thJ2pcsD9pBOoTKgumDuGf7kO+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

{{-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> --}}
{{-- <script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@floating-ui/core@0.4.0"></script>
<script src="https://unpkg.com/@floating-ui/dom@0.2.0"></script> --}}
<script src="{{ asset('js/app.js') }}"></script>

<script>
    function change(iconcaret){
        if(document.getElementById(iconcaret).className == "bi bi-chevron-up"){
            document.getElementById(iconcaret).className = "bi bi-chevron-down";
        }else{
            document.getElementById(iconcaret).className = "bi bi-chevron-up";
        }
        /* if(document.getElementById(iconcaret).className == "bi bi-chevron-down"){
            document.getElementById(iconcaret).className = "bi bi-chevron-up";
        }else{
            document.getElementById(iconcaret).className = "bi bi-chevron-down";
        } */
    }

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    /* var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    }) */


</script>

@stack('scripts')
