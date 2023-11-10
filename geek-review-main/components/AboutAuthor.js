import Component from "./Component.js"

export default class AboutAuthor extends Component
{
    async connectedCallback()
    {
        this.innerHTML = this.replaceTemplate(await this.view('about-author'), [
            this.author
        ]);
    }

    disconnectedCallback()
    {
        console.log('Dismounted', this)
    }

    get author()
    {
        return JSON.parse(this.dataset.author)
    }
}