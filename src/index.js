import Grid from "./components/Grid.vue";
import "./index.css";

window.panel.plugin("microman/grid-blocks", {
  blocks: {
    grid: Grid,
  },
  icons: {
    grid: '<path d="M0.1,0.1V5v1.5V10v1.5v4.9h16.3v-4.9V10V6.5V5V0.1H0.1z M1.5,6.5h4.1V10H1.5V6.5z M14.9,14.9H1.5v-3.4h4.1h1.4h7.8V14.9zM14.9,10H7.1V6.5h7.8V10z M7.1,5H5.6H1.5V1.6h13.4V5H7.1z"/>',
  },
});
