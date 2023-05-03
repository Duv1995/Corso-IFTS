import React from "react";

class PulsanteAzione extends React.Component {
  constructor() {
    super();
    this.onClick.bind(this);
    // nel costruttore bindo il mio onclick sul contesto della classe
    this.hasClick = false;
  }

  // metodo on click per fare le varie operazioni
  onClick = () => {
    this.props.onClick();
    this.hasClick = true;
    // esegue onclick in base al contesto legatogli nel bind
  };

  render() {
    const { refresh, label } = this.props;
    let classBtn = "";
    if ((refresh === true && this.hasClick === false) || 
    (refresh === false && this.hasClick === false)) {
        classBtn = "btn-warning";
    } else {
        classBtn = "btn-info";
    }

    if (label === "AC") {
        classBtn = "btn-danger";
    }
    //console.log(refresh, this.hasClick, label, classBtn);
    return (<button onClick={this.onClick} className={`btn d-block w-100 ${classBtn}`}>{this.props.label}</button>);
}

  componentDidUpdate() {
    // dopo che renderizzo reimposto il hasclick a default
    this.hasClick = false;
  }
}

export default PulsanteAzione;
