import React from 'react';
import ReactDOM from 'react-dom';

import EditablePage from "./editablePage";

const App = () => {
    return(
        <React.StrictMode>
        <h1 className="Logo">Memogram</h1>
        <p className="Intro">
          ↓のブロック単位のエディタにメモを入力してね{" "}
          <span role="img" aria-label="greetings" className="Emoji">
            👋
          </span>{" "}
          {/* You can add content below. Type <span className="Code">/</span> to see
          available elements. */}
        </p>
        <EditablePage />
      </React.StrictMode>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}