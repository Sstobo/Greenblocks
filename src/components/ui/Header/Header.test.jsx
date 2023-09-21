import React from 'react';
import renderer from 'react-test-renderer';
import Header from './Header';
import { render, fireEvent } from '@testing-library/react';
import '@testing-library/jest-dom';



describe('Header', () => {
// use renderer for snapshots
  it('should render correctly into the dom', () => {
    const tree = renderer.create(<Header />).toJSON();
    expect(tree).toMatchSnapshot();
  });
  
  it("subheader should say Hello World", () => {
    const { getByTestId } = render(<Header />);
    const subheader = getByTestId('subheader');
    expect(subheader).toHaveTextContent('Hello World');
  });

  it('should show proper initial count', () => {
    const { getByText } = render(<Header />);
    expect(getByText('0')).toBeInTheDocument();
  });

  it('should increment count by 1 when button is clicked', () => {
    const { getByText } = render(<Header />);
    const button = getByText('Click me');
    fireEvent.click(button);
    expect(getByText('1')).toBeInTheDocument();
  });

  it('should increment count by 3 when button is clicked 3 times', () => {
    const { getByText } = render(<Header />);
    const button = getByText('Click me');
    for (let i = 0; i < 3; i++) {
      fireEvent.click(button);
    }
    expect(getByText('3')).toBeInTheDocument();
  });
});