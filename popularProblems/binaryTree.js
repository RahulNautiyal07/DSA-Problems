class TreeNode {
    constructor(data){
        this.data = data;
        this.left = null;
        this.right = null;

    }
}

const node1 = new TreeNode(5);
const node2 = new TreeNode(6);
const node3 = new TreeNode(7);
node3.left = new TreeNode(8);

node1.left = node2;
node1.right = node3;

console.warn(node1)