import Component from "./Component.js"

export default class Header extends Component
{
    async connectedCallback()
    {
        this.innerHTML = await this.view('header')
    }

    disconnectedCallback()
    {
        console.log('Dismounted', this)
    }
}