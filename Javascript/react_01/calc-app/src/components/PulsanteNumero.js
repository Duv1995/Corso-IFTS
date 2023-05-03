import React from "react";

class PulsanteNumero extends React.Component {
    render() {
        return (<button onClick={this.props.onClick} className="w-100 btn btn-light">{this.props.label}</button>);
    }
}

export default PulsanteNumero;