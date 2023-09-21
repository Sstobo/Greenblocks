import React from 'react';
import {useState} from 'react';

// Help find tailwind classnames as we go
const Header = (props) => {
    const [count, setCount] = useState(0);

    const heading: string = props?.heading || '';
    return (
        <div className="container mx-auto p-8">
            <h6 data-testid="subheader" className="text-2xl font-bold text-center text-gray-800">Hello World</h6>
            <h1 className="text-4xl font-bold text-center text-gray-800">{heading}</h1>
            <p>{count}</p>

            <button onClick={() => setCount(count + 1)}>Click me</button>
        </div>
    )
}

export default Header