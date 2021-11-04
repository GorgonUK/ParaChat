const chats = [...document.querySelectorAll('.chat .dialog')];

const onScroll = _ => {
	const { scrollTop, scrollHeight, clientHeight } = document.scrollingElement;
	const phase = scrollTop / (scrollHeight - clientHeight);
	document.body.style.setProperty('--phase', phase);
	
	chats.forEach((e, i) => {
		const step = 1 / chats.length;
		const focalPoint = step * (i - 1);
		const focal = Math.min(Math.max(1 - (phase - focalPoint) / step, -1), 1);
		e.style.setProperty('--focal', focal);
		e.style.opacity = Math.min(Math.max(1 + focal * 2, 0), 1);
		
		const dist = (phase - step * i) / step;
		e.style.filter = `blur(${Math.min(Math.abs(dist ** 2 * 0.5), 1.2)}rem)`;
	});
};

window.addEventListener('scroll', onScroll);
onScroll();