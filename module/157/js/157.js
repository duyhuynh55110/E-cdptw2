var Item = React.createClass({
  render: function() {
    return (
        <article className="media event">
          <a className="pull-left date">
            <p className="month">{this.props.month}</p>
            <p className="day">{this.props.day}</p>
          </a>
          <div className="media-body">
            <a className="title" href="#">
              {this.props.title}
            </a>
            <p>{this.props.content}</p>
          </div>
        </article>
    );
  }
});

var a = [
  {
    id: 1,
    month: "April",
    day: 23,
    title: "Item One Title",
    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    id: 2,
    month: "April",
    day: 23,
    title: "Item One Title",
    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    id: 3,
    month: "April",
    day: 23,
    title: "Item One Title",
    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  },
  {
    id: 4,
    month: "April",
    day: 23,
    title: "Item One Title",
    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
  }
];
var han = a.map((item, index) => {
  return (
    <div key={item.id}>
      <Item
        month={item.month}
        day={item.day}
        title={item.title}
        content={item.content}
      />
    </div>
  );
});
var MD = React.createClass({
  render: function() {
    return (
        <div className="col-md-4">
          <div className="x_panel">
            <div className="x_title">
              <h2>
                Top Profiles <small>Sessions</small>
              </h2>
              <ul className="nav navbar-right panel_toolbox">
                <li>
                  <a className="collapse-link">
                    <i className="fa fa-chevron-up"></i>
                  </a>
                </li>
                <li className="dropdown">
                  <a
                    href="#"
                    className="dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-expanded="false"
                  >
                    <i className="fa fa-wrench"></i>
                  </a>
                  <ul className="dropdown-menu" role="menu">
                    <li>
                      <a href="#">Settings 1</a>
                    </li>
                    <li>
                      <a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a className="close-link">
                    <i className="fa fa-close"></i>
                  </a>
                </li>
              </ul>
              <div className="clearfix"></div>
            </div>
            <div className="x_content">{han}</div>
          </div>
      </div>
    );
  }
});
var App = React.createClass({
  render: function() {
    return (
      <div className="container">
        <div className="row">
          <MD />
          <MD />
          <MD />
        </div>
      </div>
    );
  }
});
//render ra code html vào className type-154
ReactDOM.render(<App />, document.getElementsByClassName("type-157")[0]);
