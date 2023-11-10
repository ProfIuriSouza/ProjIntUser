import Component from "./Component.js"

export default class MiddleCard extends Component
{
    async connectedCallback()
    {
        this.innerHTML = this.replaceTemplate(await this.view('popuplar-review'), [
            this.post, this.category
        ]);
    }

    disconnectedCallback()
    {
        console.log('Dismounted', this)
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