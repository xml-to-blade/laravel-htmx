<!-- Global notification live region, render this permanently at the end of the document -->
<x-ui.toast />
<div aria-live="assertive" class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end" data-htmx-toasts>
    </div>
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
</div>

