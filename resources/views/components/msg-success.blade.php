<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on("ExibirMsg", (mensagem) => {
            Toastify({
                text: mensagem,
                duration: 5000,
                gravity: "top",
                position: "center",
                stopOnFocus: true,
                style: {
                    background: "#CCFBF1",
                    borderTop: "4px solid #14B8A6",
                    color: "#124E4A",
                }
            }).showToast();
        });
    });
</script>

{{-- Mensagem da sessão --}}
@if(session()->has('msg'))
    <script>
        Livewire.dispatch('ExibirMsg', "{{session('msg')}}");
    </script>
@endif
