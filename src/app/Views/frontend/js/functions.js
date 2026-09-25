function scrollRow(rowId, direction) {
    const row = document.getElementById(rowId);
    if (!row) return;
    const scrollAmount = row.clientWidth * 0.75 * direction;
    row.scrollBy({left: scrollAmount, behavior: 'smooth'});
}

const audioBtn = document.getElementById('hero-audio-toggle');
const audioIcon = document.getElementById('hero-audio-icon');
let isMuted = true;

if (audioBtn && audioIcon) {
    audioBtn.addEventListener('click', () => {
        isMuted = !isMuted;
        audioIcon.textContent = isMuted ? 'volume_off' : 'volume_up';
    });
}