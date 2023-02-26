class ListNode {
  constructor(data) {
    this.data = data;
    this.next = null;
  }
}

class LinkedList {
  constructor(head = null) {
    console.log((head = null), "before header");
    this.head = head;
    console.log(this.head, "differ", head, "Header");
  }
}

let node1 = new ListNode(2);
let node2 = new ListNode(5);
let node3 = new ListNode(6);
let node4 = new ListNode(9);
let node5 = new ListNode(1);

node1.next = node2;
node2.next = node3;
node3.next = node4;

let list = new LinkedList(node1);
let list2 = new LinkedList(node2);
let list3 = new LinkedList(node3);
let list4 = new LinkedList(node4);
// let list5 = new LinkedList(node5);

// traverse LinkedList through recursion
function traverse(x, num) {
  if (head.data == null) {
    return false;
  }
  if (head.data == num) {
    return head.next;
  }
  if (head.next == null) {
    return false;
  }
  // console.log(head.data)
  return traverse(head.next, num);
}

//  const data =traverse(node1,9);

//  console.log(data)
// console.log(list.head.next.next) //returns 5

// class Node {
//     constructor(data){
//         this.data = data;
//         this.next = null
//     }
// }

// const node1  = new Node(3);
// const node2  = new Node(5);
// const list = new LinkedList(node1)
// const list2 = new LinkedList(node2)
// console.log(list)

// LinkedList Length
function Length(head) {
  if (head == null) {
    return 0;
  }
  let len = 0;
  while (head != null) {
    len++;
    head = head.next;
  }
  return len;
}
// const test2 = Length(node1);
// console.log(test2)

// Inserting at front
function insertAtFront(linkedList, node) {
  console.log(linkedList);
  node.next = linkedList.head;
  let list5 = new LinkedList(node);

  return list5;
}

const test3 = insertAtFront(list, node5);
console.log(list);
