import { useMemo, useState } from "react";

type Step = {
  id: number;
  title: string;
  detail: string;
};

const starterSteps: Step[] = [
  {
    id: 1,
    title: "Set up tooling",
    detail: "Install Node.js LTS, clone repo, run npm install, and start dev server.",
  },
  {
    id: 2,
    title: "Learn the basics",
    detail: "HTML structure, modern CSS (Flexbox/Grid), and React components + props/state.",
  },
  {
    id: 3,
    title: "Ship a small feature",
    detail: "Add a component, style it, make it responsive, and commit with a clear message.",
  },
];

const practiceIdeas = [
  "Build a responsive navbar with mobile toggle.",
  "Create a dashboard card that fetches public API data.",
  "Add a form with validation and helpful error states.",
  "Implement a light/dark theme switcher.",
];

function App() {
  const [doneSteps, setDoneSteps] = useState<number[]>([1, 2]);
  const [ideaIndex, setIdeaIndex] = useState(0);

  const nextIdea = () => {
    setIdeaIndex((current) => (current + 1) % practiceIdeas.length);
  };

  const toggleStep = (id: number) => {
    setDoneSteps((current) =>
      current.includes(id)
        ? current.filter((stepId) => stepId !== id)
        : [...current, id]
    );
  };

  const progressLabel = useMemo(() => {
    const completed = doneSteps.length;
    const total = starterSteps.length;
    if (completed === 0) return "Getting started";
    if (completed === total) return "Ready for the next project";
    return `Progress: ${completed}/${total}`;
  }, [doneSteps.length]);

  return (
    <main className="page">
      <section className="hero">
        <div className="pill">Beginner-friendly roadmap</div>
        <h1>chyort's Frontend Practice Lab</h1>
        <p className="lede">
          I'm learning React by building small, focused UI pieces.
        </p>
        <div className="actions">
          <a className="button" href="https://vitejs.dev/guide/" target="_blank" rel="noreferrer">
            Vite guide
          </a>
          <a className="button ghost" href="https://react.dev/learn" target="_blank" rel="noreferrer">
            React learn
          </a>
        </div>
      </section>

      <section id="roadmap" className="card grid">
        <header className="card__header">
          <div>
            <p className="eyebrow">Your first tasks</p>
            <h2>3 quick wins</h2>
          </div>
          <span className="pill muted">{progressLabel}</span>
        </header>
        <div className="steps">
          {starterSteps.map((step) => {
            const done = doneSteps.includes(step.id);
            return (
              <label key={step.id} className={`step ${done ? "done" : ""}`}>
                <input
                  type="checkbox"
                  checked={done}
                  onChange={() => toggleStep(step.id)}
                  aria-label={step.title}
                />
                <div>
                  <p className="step__title">{step.title}</p>
                  <p className="step__detail">{step.detail}</p>
                </div>
              </label>
            );
          })}
        </div>
      </section>

      <section id="ideas" className="card">
        <header className="card__header">
          <div>
            <p className="eyebrow">Practice idea</p>
            <h2>Build one small UI</h2>
          </div>
          <button className="button ghost" type="button" onClick={nextIdea}>
            Shuffle idea
          </button>
        </header>
        <div className="idea">
          <p>{practiceIdeas[ideaIndex]}</p>
          <ul className="idea__steps">
            <li>Sketch the layout (mobile first).</li>
            <li>Code the structure in JSX.</li>
            <li>Style with Flexbox/Grid and spacing tokens.</li>
            <li>Add keyboard and screen-reader friendly controls.</li>
          </ul>
        </div>
      </section>

      <section id="habits" className="card">
        <header className="card__header">
          <div>
            <p className="eyebrow">What to practice weekly</p>
            <h2>Steady habits</h2>
          </div>
        </header>
        <div className="habits">
          <div>
            <p className="habit__title">Code and ship</p>
            <p className="habit__detail">1-2 pull requests per week, each focused on a single change.</p>
          </div>
          <div>
            <p className="habit__title">Read and trace</p>
            <p className="habit__detail">Pick one open-source PR or article, rewrite it in your own words.</p>
          </div>
          <div>
            <p className="habit__title">Demo your work</p>
            <p className="habit__detail">Record a 2-minute Loom walking through what changed and why.</p>
          </div>
        </div>
      </section>
    </main>
  );
}

export default App;
