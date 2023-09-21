import React from 'react';

// Help find tailwind classnames as we go
const Footer = (props) => {
    const heading: string = props?.heading || '';
    return (
        <div className="container mx-auto p-8 bg-slate-500">
            <h1 className="text-4xl font-bold text-center text-gray-800">{heading}</h1>
        </div>
    )
}

export default Footer