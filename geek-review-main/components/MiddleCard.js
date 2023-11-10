import Component from "./Component.js"

export default class MiddleCard extends Component
{
    async connectedCallback()
    {
        this.innerHTML = this.replaceTemplate(await this.view('middle-card'), [
            this.author, this.post, this.category
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

    get post()
    {
        return JSON.parse(this.dataset.post)
    }

    get category()
    {
        return JSON.parse(this.dataset.category)
    }
}