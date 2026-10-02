</div>
<script>
    function setActiveRange(range) {
        const btn24h = document.getElementById('range-24h');
        const btn7d = document.getElementById('range-7d');
        const btn30d = document.getElementById('range-30d');

        [btn24h, btn7d, btn30d].forEach(btn => {
            btn.className = "px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors";
        });

        const target = range === '24h' ? btn24h : (range === '7d' ? btn7d : btn30d);
        target.className = "px-space-sm py-1.5 rounded font-label-md text-label-md bg-surface-container-highest text-on-surface shadow-sm";
    }

    function filterCatalog(category) {
        const tabs = ['all', 'movies', 'series', 'games'];
        tabs.forEach(tab => {
            const el = document.getElementById('tab-' + tab);
            if (tab === category) {
                el.className = "px-space-sm py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface font-semibold shadow-sm transition-colors";
            } else {
                el.className = "px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors";
            }
        });

        const rows = document.querySelectorAll('#catalog-table-body tr');
        rows.forEach(row => {
            const rowCat = row.getAttribute('data-category');
            if (category === 'all' || rowCat === category) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>
</main>
</div>
</body>
</html>