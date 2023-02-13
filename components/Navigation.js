import Link from 'next/link';
import React, { useEffect, useRef } from 'react'

const Navigation = ({setNav}) => {
    const ref = useRef();
    useOnClickOutside(ref, ()=> setNav(false));
    const closeHandler = () => {
        setNav(false);
      };
  return (
    <div ref={ref} className="flex fixed h-screen top-0 right-0 flex-col max-w-md p-6 space-y-4 divide-y sm:w-96 sm:p-10 divide-gray-700 dark:bg-gray-900 dark:text-gray-100">
        
	<h2 className="text-2xl font-semibold">Hello World !</h2>
	<ul className="flex flex-col pt-4 space-y-2">
		<li className="flex items-start justify-between">
			<h3>Divyashwar
				<span className="dark:text-teal-400 pl-2">Raj</span>
			</h3>
			
		</li>
		<li className="flex items-start justify-between">
			
			<div className="">
				<span className="block text-gray-400 text-sm">Web Developer</span>
			</div>
		</li>
		
	</ul>
	<div className="pt-4 space-y-2">
		2+ Years of Experience
	</div>
	<div className="pt-4 space-y-2">
		
		<div className="space-y-6">
			<div>
				<p>GitHub Link</p>
				<Link href="https://github.com/racingfoxs/" className="font-semibold block text-teal-400">Click Here</Link>
			</div>
			<button type="button" onClick={closeHandler} className="w-full py-2 font-semibold border rounded dark:bg-teal-400 dark:text-gray-900 dark:border-teal-400">Close</button>
		</div>
	</div>
</div>
  )
}

export default Navigation

function useOnClickOutside(ref, handler) {
    useEffect(
      () => {
        const listener = (event) => {
          // Do nothing if clicking ref's element or descendent elements
          if (!ref.current || ref.current.contains(event.target)) {
            return;
          }
          handler(event);
        };
        document.addEventListener("mousedown", listener);
        document.addEventListener("touchstart", listener);
        return () => {
          document.removeEventListener("mousedown", listener);
          document.removeEventListener("touchstart", listener);
        };
      },
      [ref, handler]
    );
  }