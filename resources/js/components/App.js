import React from 'react';
import ReactDOM from 'react-dom';

const App = () => {
    return(
        <p>表示されました</p>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}