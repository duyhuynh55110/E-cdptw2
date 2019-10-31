var list = new Vue({
    el: ".profiles-user",
    data: {
        name: "project",
        dragging: -1,
        users: [
            {name: "Duy Huynh", money: 2300, note: "This is Duy", sales: 12},
            {name: "Trang Nguyen", money: 200, note: "This is Trang", sales: 15},
            {name: "Vy Huynh", money: 1500, note: "This is Vy", sales: 16},
            {name: "Cong Nang", money: 2000, note: "This is Cong", sales: 20},
        ]
    },
    methods: {
        dragStart(which, ev) {
            ev.dataTransfer.setData('Text', this.id);
            ev.dataTransfer.dropEffect = 'move'
            this.dragging = which;
        },
        dragEnter(ev) {
          /* 
          if (ev.clientY > ev.target.height / 2) {
            ev.target.style.marginBottom = '10px'
          } else {
            ev.target.style.marginTop = '10px'
          }
          */
        },
        dragLeave(ev) {
          /* 
          ev.target.style.marginTop = '2px'
          ev.target.style.marginBottom = '2px'
          */
        },
        dragEnd(ev) {
          this.dragging = -1
        },
        dragFinish(to, ev) {
          this.moveItem(this.dragging, to);
          ev.target.style.marginTop = '2px'
          ev.target.style.marginBottom = '2px'
        },
        moveItem(from, to) {
          if (to === -1) {
            this.removeItemAt(from);
          } else {
            this.users.splice(to, 0, this.users.splice(from, 1)[0]);
          }
        }
    },
    computed: {
        isDragging() {
          return this.dragging > -1
        }
     },
})

