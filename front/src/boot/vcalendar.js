import VCalendar from 'v-calendar';
import 'v-calendar/style.css';


export default ({ app, router, store }) => {
  app.use(VCalendar, {
    navVisibility: 'click',
    firstdayofweek : 2n
  })
}
