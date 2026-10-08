<footer>
    <p>&copy; 2026 DBSStats</p>
    <p>Todos os direitos reservados.</p>
    <p>"Nunca desista dos seus sonhos." - Goku</p>
</footer>

<button id="btnTopo" onclick="voltarAoTopo()">▲ Topo</button>

<script>
// Usei IA!
function voltarAoTopo() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

window.onscroll = function() {
    var botao = document.getElementById("btnTopo");
    if (document.documentElement.scrollTop > 200 || document.body.scrollTop > 200) {
        botao.style.display = "block";
    } else {
        botao.style.display = "none";
    }
};
</script>