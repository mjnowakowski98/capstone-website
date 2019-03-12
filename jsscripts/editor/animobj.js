class AnimObj {
    constructor(_key, _type) {
        let key = _key;
        this.getKey = () => key;

        let type = _type;
        this.getType = () => type;

        let childObjs = new Array();
        this.setChildObjs = (_childObjs) => childObjs = _childObjs;
        this.addChild = function(newChild) {

        }
    }
}