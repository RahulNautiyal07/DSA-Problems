
	class Node
	{
		constructor(data) {
		this.left = null;
		this.right = null;
		this.data = data;
		}
	}
		
	function insert(node, data) {
		
		/* 1. If the tree is empty, return a new,	
		single node */
		if (node == null) {
			return (new Node(data));
		} else {
			
			/* 2. Otherwise, recur down the tree */
			if (data <= node.data) {
				node.left = insert(node.left, data);
			} else {
				node.right = insert(node.right, data);
			}

			/* return the (unchanged) node pointer */
			return node;
		}
	}

	/* Given a non-empty binary search tree,
	return the minimum data value found in that
	tree. Note that the entire tree does not need
	to be searched. */
	function minvalue(node) {
		let current = node;

		/* loop down to find the leftmost leaf */
		while (current.left != null) {
			current = current.left;
		}
		return (current.data);
	}

    function maxValue(node){
        let current = node;
       while(current.right != null){
           current = current.right;
       }
       return current.data;
    }
	
	let root = null;

	root = insert(root, 4);
	insert(root, 2);
	insert(root, 1);
	insert(root, 3);
	insert(root, 6);
	insert(root, 5);

    const maxValue =  maxValue(root);

    console.log(maxValue);