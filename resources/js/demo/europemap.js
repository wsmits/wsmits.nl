document.addEventListener('DOMContentLoaded', () => {
    const countryData = {
        NL: { name: 'Nederland', color: '#ff6600', 'scale': 1.8 },
        BE: { name: 'België', color: '#ffaa00', 'scale': 1.9 },
        FR: { name: 'Frankrijk', color: '#00aaff', 'scale': 1.2 }
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
            highlightCountry(code, true);
            showTooltip(e, path);
        });
        path.addEventListener('mouseleave', e => {
            path.style.fillOpacity = 1;
            highlightCountry(code, false);
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

    function bringToFront(path) {
        const svg = path.ownerSVGElement;
        svg.appendChild(path); // plaatst het path achteraan in de DOM → bovenop
    }

    function highlightCountry(code, active) {
        const scale = active ? (countryData[code]?.scale || 1.06) : 1;
        document.querySelectorAll(`#${code}, .${code}`).forEach(el => {
            el.style.transition = 'transform 0.15s ease';
            el.style.transformOrigin = 'center';
            el.style.transform = `scale(${scale})`;
            el.style.fillOpacity = active ? 0.9 : 1;

            if (active) bringToFront(el); // alleen bij hover
        });
    }
});
