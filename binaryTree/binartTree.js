class Node{
    constructor(data){
        this.data = data;
        this.left = null;
        this.right = null;
    }
    
}

class Tree {
    constructor(){
            this.root = null;       
    }

    insert(data){

        let newNode = new Node(data);

        if(this.root == null){
            this.root = newNode;
        }
        else {
         this.insertNode(this.root, newNode);
        }
    }
        
    insertNode(root,node){
        if(root.data > node.data){
            if(root.left ==null){
                    root.left = node;
            }else{
                this.insertNode(root.left,node)
            }
        }
        if(root.data < node.data){
            if(root.right == null){
                root.right = node;
            } else {
                this.insertNode(root.right, node)
            }
        }
    }
}
    

    let BTree = new Tree();
    BTree.insert(25);
    BTree.insert(10);
    BTree.insert(15);
    BTree.insert(30);
    BTree.insert(35);

    console.log(BTree);
console.log(BTree.root.right)
console.log(BTree.root.left)