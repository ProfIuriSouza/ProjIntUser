import Component from "./Component.js"

export default class Footer extends Component
{
    async connectedCallback()
    {
        this.innerHTML = await this.view('footer')
    }

    disconnectedCallback()
    {
        console.log('Dismounted', this)
    }
}