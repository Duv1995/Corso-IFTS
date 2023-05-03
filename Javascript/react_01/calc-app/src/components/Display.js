import React from "react";

class Display extends React.Component {
  render() {
    return (
      <div className="col-12 text-bg-dark p-3 text-end">
        {/* faccio comparire lo storico dei vari input premuti dentro il display */}
        <div className="fs-5">
          {this.props.operatore} {this.props.azione}
        </div>

        <div className="fs-3">{this.props.risultato}</div>
      </div>
    );
  }
}
export default Display;
