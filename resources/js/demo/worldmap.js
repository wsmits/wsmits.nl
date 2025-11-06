document.addEventListener('DOMContentLoaded', () => {
    const countryData = {
        NL: { name: 'Nederland', color: '#ff6600' },
        BE: { name: 'België', color: '#ffaa00' },
        France: { name: 'Frankrijk', color: '#00aaff' }
    };

    // Per land: kleur zetten
    Object.entries(countryData).forEach(([code, data]) => {
        // Selecteer ALLE paths die óf de class óf de id van het land hebben
        const elements = document.querySelectorAll(`#${code}, .${code}`);

        elements.forEach(el => {
            el.style.fill = data.color;
        });
    });

    // Hover & click events (voor ALLE paths)
    document.querySelectorAll('#europemap path').forEach(path => {
        const code = path.id || path.classList[0]; // Landcode bepalen
        if (!code) return;

        path.addEventListener('mouseenter', e => {
            path.style.fillOpacity = 0.7;
            showTooltip(e, path);
        });
        path.addEventListener('mouseleave', e => {
            path.style.fillOpacity = 1;
            hideTooltip();
        });
        path.addEventListener('click', e => {
            const name = getCountryName(path);
            alert('Informatie over ' + name);
        });
    });

    function getCountryName(path) {
        if (path.getAttribute('name')) return path.getAttribute('name');
        const code = path.id || path.classList[0];
        if (countryData[code]?.name) return countryData[code].name;
        return code;
    }

    function showTooltip(e, path) {
        const tooltip = document.getElementById('tooltip');
        tooltip.textContent = getCountryName(path);
        tooltip.style.top = e.pageY + 'px';
        tooltip.style.left = e.pageX + 'px';
        tooltip.classList.remove('hidden');
    }

    function hideTooltip() {
        document.getElementById('tooltip').classList.add('hidden');
    }
});
