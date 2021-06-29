function currentTime(id) {
  date = new Date();
  year = date.getFullYear();
  month = date.getMonth();
  months = new Array(
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  );
  d = date.getDate();
  day = date.getDay();
  days = new Array(
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  );
  ampm = date.getHours() >= 12 ? "PM" : "AM";
  h = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
  if (h < 10) {
    h = "0" + h;
  }
  m = date.getMinutes();
  if (m < 10) {
    m = "0" + m;
  }
  s = date.getSeconds();
  if (s < 10) {
    s = "0" + s;
  }
  result = h + ":" + m + ":" + s + " " + ampm;
  document.getElementById(id).innerHTML = result;
  setTimeout('currentTime("' + id + '");', "1000");
  return true;
}
