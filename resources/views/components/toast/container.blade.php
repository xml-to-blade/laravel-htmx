<!-- Global notification live region, render this permanently at the end of the document -->
<x-ui.toast />
    <script>
    document.body.addEventListener("toastNotify", function(evt){
        let toast = (evt.detail.value);
        window.dispatchEvent(
            new CustomEvent('notify', {
                detail: {
                    type: toast.variant,
                    content: toast.heading,
                    duration: 3000
                }
            })
        );
    });
    document.body.addEventListener("openModal", function(evt){
        let modal = (evt.detail.value);
        let modalElement = document.querySelector('[data-modal-name=' + modal + ']');
        if (!modalElement) {
            return;
        }
        modalElement.showModal();
    });
    </script>

