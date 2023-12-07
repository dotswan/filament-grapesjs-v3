document.addEventListener('alpine:init', () => {
    Alpine.data(
        "grapesjs",
        ({ state, statePath, readOnly, tools, minHeight, container }) => ({
            instance: null,
            state: state,
            tools: tools,
            init() {
                let enabledTools = {};

                this.instance =  grapesjs.init({
                    height: minHeight + 'px',
                    container: container ? container : ".filament-grapesjs .grapesjs-wrapper",
                    showOffsets: true,
                    fromElement: true,
                    noticeOnUnload: false,
                    storageManager: false,
                    loadHtml: state,
                    plugins: [
                        "grapesjs-tailwind",
                    ],
                });
                this.instance.on('update', e => {
                    var content = this.instance.getHtml({
                        cleanId: true
                    });
                    var extract = content.match(/<body\b[^>]*>([\s\S]*?)<\/body>/);
                    if(extract)
                        this.state = extract[1];
                    else
                        this.state = this.instance.getHtml();
                })
            }
        })
    )
})