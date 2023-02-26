
class Node {
    constructor(data) {
        this.data = data
        this.next = null                
    }
}

class LinkedList {
    constructor(head = null) {
        console.log((head = null), "before header");
        this.head = head;
        console.log(this.head, "differ", head, "Header");
        
    }

    appendNode(newNode){
        let node = this.head;
        if(node==null){
            //Means it's just empty list
            this.head = newNode;
            return;
        }
        while (node.next) {
            node = node.next;
        }
        node.next = newNode;
    }

    insertAt(index, newNode){
        let node = this.head;
        if(index==0) {
            newNode.next = node;
            this.head = newNode;
            return;
        }
        console.log(index,"Hhhhhh")
        while(--index){
            console.log(index,"sdsds")
            if(node.next!==null)
                node = node.next;
            else
                throw Error("Index Out of Bound");
        }
        let tempVal = node.next;
        node.next = newNode;
        newNode.next = tempVal;
    }

    printList(){
        let node = this.head;
        process.stdout.write("HEAD->")
        while (node) {
            process.stdout.write(node.data + "->");
            node = node.next;
        }
        console.log("NULL");
    }
    
    
    
}

// let myList = new LinkedList();
// let node = new Node(5);

let myList = new LinkedList();
let node = new Node(5);

myList.appendNode(node);
myList.appendNode(new Node(11));
myList.appendNode(new Node(7));
myList.appendNode(new Node(8));
myList.appendNode(new Node(9));

myList.insertAt(0, new Node(19));
// myList.printList();

myList.insertAt(5, new Node(21));
// myList.printList();

// myList.insertAt(6, new Node(32));
myList.printList();

// myList.printList();
console.log(myList)
process.stdout.write("sbdjsbfjdsbhj")
// process.stdin.read("sbdjsbfjdsbhj")
process.stdout.write("sbdjsbfjdsbhj")


