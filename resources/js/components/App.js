import React from 'react';
import ReactDOM from 'react-dom';

const App = () => {
    return(
        <p>テスト編集aaaaaa</p>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}