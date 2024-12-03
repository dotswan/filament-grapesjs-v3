document.addEventListener('alpine:init', () => {
    Alpine.data(
        "grapesjs",
        ({ state, statePath, readOnly, tools, minHeight, container, projectData }) => ({
            instance: null,
            state: state,
            tools: tools,
            init() {
                let enabledTools = {};

                this.instance =  grapesjs.init({
                    projectData: projectData,
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
                    this.instance.getHtml({
                        cleanId: true
                    });
                    this.state = this.instance.getProjectData();
                })
            }
        })
    )
})